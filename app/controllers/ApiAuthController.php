
<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ApiAuthController extends Controller
{
    protected $api;

    public function __construct()
    {
        parent::__construct();

        $this->api = $this->call->library('api');
        $this->call->model('AuthModel');
    }

    public function login()
    {
        $data = $this->api->body();

        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';

        if (empty($username) || empty($password)) {
            $this->api->respond_error(
                'Username and password are required.',
                400
            );
            return;
        }

        $user = $this->AuthModel->find_by('username', $username);

        if (!$user || !password_verify($password, $user['password'])) {
            $this->api->respond_error(
                'Invalid username or password.',
                401
            );
            return;
        }

        $tokens = $this->api->issue_tokens([
            'id' => $user['id'],
            'username' => $user['username']
        ]);

        $this->api->respond([
            'message' => 'Login successful.',
            'user' => [
                'id' => $user['id'],
                'username' => $user['username']
            ],
            'tokens' => $tokens
        ]);
    }
}