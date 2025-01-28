<?php


class IndexController 
{
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] !== 'GET') {
            http_response_code(405);
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Method Not Allowed']);
            return;
        }
        http_response_code(200);
        header('Content-Type: application/json');
        $data = [
            'email' => 'samspike46@gmail.com',
            'current_datetime' => date('Y-m-d\TH:i:s\Z'),
            'github_url' => 'https://github.com/samsmithkruz/hng12_01'
        ];
        echo json_encode($data);
    }
}
