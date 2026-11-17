<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/home');
        $this->load->view('templates/footer');
    }

    public function historia()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/historia');
        $this->load->view('templates/footer');
    }

    public function gameplay()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/gameplay');
        $this->load->view('templates/footer');
    }

    public function personajes()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/personajes');
        $this->load->view('templates/footer');
    }

    public function contacto()
    {
        $data['mensaje_contacto'] = '';

        if ($this->input->post('enviar_contacto')) {
            $nombre = htmlspecialchars($this->input->post('nombre'), ENT_QUOTES, 'UTF-8');
            $data['mensaje_contacto'] = "¡Gracias por escribirnos, <strong>{$nombre}</strong>! Tu mensaje fue recibido por el equipo de Estudio Point Break.";
        }

        $this->load->view('templates/header');
        $this->load->view('paginas/contacto', $data);
        $this->load->view('templates/footer');
    }

    public function usuario()
    {
        $data['mensaje_exito'] = '';

        if ($this->input->post('accion') === 'login') {
            $email = htmlspecialchars($this->input->post('email'), ENT_QUOTES, 'UTF-8');
            $data['mensaje_exito'] = "¡Bienvenido de nuevo! Has iniciado sesión como <strong>{$email}</strong>.";
        } elseif ($this->input->post('accion') === 'registro') {
            $usuario = htmlspecialchars($this->input->post('usuario'), ENT_QUOTES, 'UTF-8');
            $data['mensaje_exito'] = "¡Cuenta creada con éxito! Ya podés competir en el circuito como <strong>{$usuario}</strong>.";
        } elseif ($this->input->post('accion') === 'recuperar') {
            $email = htmlspecialchars($this->input->post('email_recuperar'), ENT_QUOTES, 'UTF-8');
            $data['mensaje_exito'] = "Hemos enviado un enlace de recuperación de contraseña a <strong>{$email}</strong>. Revisá tu bandeja de entrada.";
        }

        $this->load->view('templates/header');
        $this->load->view('paginas/usuario', $data);
        $this->load->view('templates/footer');
    }

    public function multimedia()
    {
        $this->load->view('templates/header');
        $this->load->view('paginas/multimedia');
        $this->load->view('templates/footer');
    }
}