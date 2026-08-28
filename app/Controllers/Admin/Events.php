<?php

namespace App\Controllers\Admin;

use App\Models\EventModel;
use App\Models\FormModel;

class Events extends BaseAdminController
{
    protected EventModel $eventModel;
    protected FormModel $formModel;

    public function initController(
        \CodeIgniter\HTTP\RequestInterface $request,
        \CodeIgniter\HTTP\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);
        $this->eventModel = new EventModel();
        $this->formModel  = new FormModel();
    }

    public function index()
    {
        if (! $this->can('events.view')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $search = $this->request->getGet('search');
        $builder = $this->eventModel;
        if (! empty($search)) {
            $builder = $builder->groupStart()
                ->like('name', $search)
                ->orLike('event_code', $search)
                ->groupEnd();
        }
        $events = $builder->orderBy('id', 'DESC')->paginate(20);
        $pager  = $this->eventModel->pager;

        // Lampirkan info form & jumlah registrasi.
        foreach ($events as &$e) {
            $form = $this->formModel->where('event_id', $e['id'])->first();
            $e['form_id']   = $form['id'] ?? null;
            $e['form_name'] = $form['title'] ?? null;
        }
        unset($e);

        return $this->render('admin/events/index', [
            'title'  => 'Events',
            'events' => $events,
            'pager'  => $pager,
            'search' => $search,
        ]);
    }

    public function create()
    {
        if (! $this->can('events.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        return $this->render('admin/events/create', [
            'title' => 'Create Event',
        ]);
    }

    public function store()
    {
        if (! $this->can('events.create')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $rules = [
            'name'        => 'required|min_length[3]|max_length[191]',
            'event_code'  => 'required|max_length[50]|alpha_dash|is_unique[fb_events.event_code]',
            'slug'        => 'permit_empty|max_length[191]|alpha_dash|is_unique[fb_events.slug]',
            'location'    => 'permit_empty|max_length[191]',
            'description' => 'permit_empty',
            'start_date'  => 'permit_empty|valid_date',
            'end_date'    => 'permit_empty|valid_date',
            'status'      => 'required|in_list[active,inactive,closed]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->eventModel->insert([
            'event_code'  => strtoupper($this->request->getPost('event_code')),
            'name'        => $this->request->getPost('name'),
            'slug'        => $this->request->getPost('slug') ?: null,
            'location'    => $this->request->getPost('location'),
            'description' => $this->request->getPost('description'),
            'start_date'  => $this->request->getPost('start_date') ?: null,
            'end_date'    => $this->request->getPost('end_date') ?: null,
            'status'      => $this->request->getPost('status'),
        ]);

        return redirect()->to('/admin/events')->with('success', 'Event berhasil dibuat.');
    }

    public function edit(int $id)
    {
        if (! $this->can('events.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $event = $this->eventModel->find($id);
        if (! $event) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        return $this->render('admin/events/edit', [
            'title' => 'Edit Event',
            'event' => $event,
        ]);
    }

    public function update(int $id)
    {
        if (! $this->can('events.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $event = $this->eventModel->find($id);
        if (! $event) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $rules = [
            'name'        => 'required|min_length[3]|max_length[191]',
            'event_code'  => "required|max_length[50]|alpha_dash|is_unique[fb_events.event_code,id,{$id}]",
            'slug'        => "permit_empty|max_length[191]|alpha_dash|is_unique[fb_events.slug,id,{$id}]",
            'location'    => 'permit_empty|max_length[191]',
            'description' => 'permit_empty',
            'start_date'  => 'permit_empty|valid_date',
            'end_date'    => 'permit_empty|valid_date',
            'status'      => 'required|in_list[active,inactive,closed]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->eventModel->update($id, [
            'event_code'  => strtoupper($this->request->getPost('event_code')),
            'name'        => $this->request->getPost('name'),
            'slug'        => $this->request->getPost('slug') ?: null,
            'location'    => $this->request->getPost('location'),
            'description' => $this->request->getPost('description'),
            'start_date'  => $this->request->getPost('start_date') ?: null,
            'end_date'    => $this->request->getPost('end_date') ?: null,
            'status'      => $this->request->getPost('status'),
        ]);

        return redirect()->to('/admin/events')->with('success', 'Event berhasil diperbarui.');
    }

    public function delete(int $id)
    {
        if (! $this->can('events.delete')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $this->eventModel->delete($id);

        return redirect()->to('/admin/events')->with('success', 'Event berhasil dihapus.');
    }

    public function toggle(int $id)
    {
        if (! $this->can('events.edit')) {
            return redirect()->back()->with('error', 'Akses ditolak.');
        }

        $event = $this->eventModel->find($id);
        if (! $event) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        }

        $newStatus = $event['status'] === EventModel::STATUS_ACTIVE
            ? EventModel::STATUS_INACTIVE
            : EventModel::STATUS_ACTIVE;

        $this->eventModel->update($id, ['status' => $newStatus]);

        return redirect()->to('/admin/events')->with('success', 'Status event diperbarui.');
    }
}
