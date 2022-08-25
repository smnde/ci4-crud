<?php

namespace App\Controllers;

use App\Models\Registrant;

class RegistrantController extends BaseController
{
    public function index()
    {
		$model = new Registrant;
		$data['title'] = 'Pendaftaran';
		$data['registrants'] = $model->getRegistrant(); 
        return view('layouts/header', $data)
			. view('layouts/navbar')
			. view('registrant/index')
			. view('layouts/footer');
    }

	public function show($id)
	{
		$model = new Registrant;
		$data['title'] = 'Detail pendaftar';
		$data['registrant'] = $model->getRegistrantById($id);
		return view('layouts/header', $data)
			. view('layouts/navbar')
			. view('registrant/detail')
			. view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah data';
		return view('layouts/header', $data)
			. view('layouts/navbar')
			. view('registrant/create')
			. view('layouts/footer');
	}

	public function store()
	{
		$model = new Registrant;
		$data = [
			'fullname'       => $this->request->getPost('fullname'),
			'birth'          => date('Y-m-d', strtotime($this->request->getPost('birth'))),
			'address'        => $this->request->getPost('address'),
			'gender'         => $this->request->getPost('gender'),
			'religion'       => $this->request->getPost('religion'),
			'graduated_from' => $this->request->getPost('graduated_from'),
			'ipk'            => $this->request->getPost('ipk'),
		];

		$model->saveRegistrant($data);

		echo '
		<script>
			alert("Sukses Tambah Data Pendaftar");
			window.location=" ' . base_url('registrant') . ' "
		</script>';
	}

	public function edit($id)
	{
		$model = new Registrant;
		$data['title'] = 'Edit data';
		$data['registrant'] = $model->getRegistrantById($id);
		return view('layouts/header', $data)
			. view('layouts/navbar')
			. view('registrant/edit')
			. view('layouts/footer');
	}

	public function update($id)
	{
		$model = new Registrant;
		$data = [
			'fullname'       => $this->request->getPost('fullname'),
			'birth'          => date('Y-m-d', strtotime($this->request->getPost('birth'))),
			'address'        => $this->request->getPost('address'),
			'gender'         => $this->request->getPost('gender'),
			'religion'       => $this->request->getPost('religion'),
			'graduated_from' => $this->request->getPost('graduated_from'),
			'ipk'            => $this->request->getPost('ipk'),
		];
		$model->updateRegistrant($id, $data);

		echo '
		<script>
			alert("Sukses Edit Data Pendaftar");
			window.location=" ' . base_url('registrant') . ' "
		</script>';
	}

	public function destroy($id)
	{
		$model = new Registrant;
		$model->deleteRegistrant($id);

		echo '
		<script>
			alert("Sukses Hapus Data Pendaftar");
			window.location=" ' . base_url('registrant') . ' "
		</script>';
	}
}
