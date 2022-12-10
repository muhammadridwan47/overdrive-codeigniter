<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if(!isAdmin()) redirect('home');
    }

    public function index()
    {
        $allProduct = $this->ModelAdmin->getAllProduct()->result_array();
        $data = ['products' => $allProduct];
        $this->load->view('templates/header');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function delete($idProduct = null)
    {
        $this->ModelAdmin->deleteProductById($idProduct);
        redirect('admin');
    }

    public function create()
    {
        $this->form_validation->set_rules('productName', 'Nama Produk', 'required|trim');
        $this->form_validation->set_rules('description', 'Deskripsi Produk', 'required|trim');
        $this->form_validation->set_rules('productPrice', 'Harga Produk', 'required|trim');
        $this->form_validation->set_rules('interior', 'Interior Produk', 'required|trim');
        $this->form_validation->set_rules('productArea', 'Luas Area', 'required|trim');
        $this->form_validation->set_rules('productSertificate', 'Sertifikat Produk', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('admin/create');
            $this->load->view('templates/footer');
        } else {
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/images/';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {
                     echo $this->upload->dispay_errors();
                }
            }
            $data = [
                'nama_produk' => htmlspecialchars($this->input->post('productName', true)),
                'deskripsi_produk' => htmlspecialchars($this->input->post('description', true)),
                'harga_produk' => htmlspecialchars($this->input->post('productPrice', true)),
                'interior_produk' => htmlspecialchars($this->input->post('interior', true)),
                'luas_produk' => htmlspecialchars($this->input->post('productArea', true)),
                'sertifikat' => htmlspecialchars($this->input->post('productSertificate', true)),
                'gambar' => $this->upload->data('file_name')
            ];
            $this->ModelAdmin->createProduct($data);
            redirect('admin');
        }
    }


    public function edit($idProduct = null)
    {
        // Get detail product by id
        $product =  $this->ModelAdmin->getProductById($idProduct);
        $data = ['product' => $product];
        // Validation form
        $this->form_validation->set_rules('productName', 'Nama Produk', 'required|trim');
        $this->form_validation->set_rules('description', 'Deskripsi Produk', 'required|trim');
        $this->form_validation->set_rules('productPrice', 'Harga Produk', 'required|trim');
        $this->form_validation->set_rules('interior', 'Interior Produk', 'required|trim');
        $this->form_validation->set_rules('productArea', 'Luas Area', 'required|trim');
        $this->form_validation->set_rules('productSertificate', 'Sertifikat Produk', 'required|trim');
 
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
        } else {
            // Check if has a image will be uploaded
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/images/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $getProduct =  $this->ModelAdmin->getProductById($this->input->post('idProduct', true));
                    $old_image = $getProduct['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }
            $form = [
                'nama_produk' => htmlspecialchars($this->input->post('productName', true)),
                'deskripsi_produk' => htmlspecialchars($this->input->post('description', true)),
                'harga_produk' => htmlspecialchars($this->input->post('productPrice', true)),
                'interior_produk' => htmlspecialchars($this->input->post('interior', true)),
                'luas_produk' => htmlspecialchars($this->input->post('productArea', true)),
                'sertifikat' => htmlspecialchars($this->input->post('productSertificate', true))
            ];
            $this->db->where('id_produk', $this->input->post('idProduct', true));
            $this->db->update('produk', $form);
            redirect('admin');
        }
    }
}
