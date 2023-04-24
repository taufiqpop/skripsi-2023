<?php

namespace App\Controllers;

class RapmaFM extends BaseController
{
    public function index()
    {
        $data['title'] = 'Rapma FM';
        return view('rapmafm/index', $data);
    }

    public function podcast()
    {
        $podcastModel = new \App\Models\PodcastModel();

        $currentPage = $this->request->getVar('page_podcast') ? $this->request->getVar('page_podcast') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $podcast = $podcastModel->search($keyword);
        } else {
            $podcast = $podcastModel;
        }

        $podcastModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Podcast',
            'podcast'       => $podcast->paginate(5, 'podcast'),
            'pager'         => $podcastModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('rapmafm/podcast', $data);
    }

    public function newsflash()
    {
        $newsflashModel = new \App\Models\NewsflashModel();

        $currentPage = $this->request->getVar('page_newsflash') ? $this->request->getVar('page_newsflash') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $newsflash = $newsflashModel->search($keyword);
        } else {
            $newsflash = $newsflashModel;
        }

        $newsflashModel->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Newsflash',
            'newsflash'     => $newsflash->paginate(5, 'newsflash'),
            'pager'         => $newsflashModel->pager,
            'currentPage'   => $currentPage,
        ];

        return view('rapmafm/newsflash', $data);
    }

    public function structure()
    {
        $data['title'] = 'Rapma FM | Structure of Organization';
        return view('rapmafm/structure', $data);
    }

    public function program()
    {
        $data['title'] = 'Rapma FM | Program Acara';
        return view('rapmafm/program', $data);
    }

    public function events()
    {
        $data['title'] = 'Rapma FM | Events';
        return view('rapmafm/events', $data);
    }

    public function achievements()
    {
        $data['title'] = 'Rapma FM | Achievements';
        return view('rapmafm/achievements', $data);
    }

    public function contact()
    {
        $data['title'] = 'Rapma FM | Contact Person';
        return view('rapmafm/contact', $data);
    }

    public function rapmafest8()
    {
        $data['title'] = 'Rapma FM | RAPMAFEST #8';
        return view('rapmafm/rapmafest8', $data);
    }

    // Save Data
    public function save()
    {
        $pesanModel = new \App\Models\PesanModel();

        $pesanModel->save([
            'name' => $this->request->getVar('name'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
        ]);

        session()->setFlashdata('pesan', 'Pesan Berhasil Dikirim! Terima Kasih CampusBrainers!');
        return redirect('contact');
    }
}
