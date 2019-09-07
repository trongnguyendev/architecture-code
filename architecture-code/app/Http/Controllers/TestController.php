<?php

namespace App\Http\Controllers;
use App\Repositories\AbstractRepository;
use App\Repositories\PostRepository;
use App\Repositories\Notify;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $repository;

    public function __construct(PostRepository $repository) {
        $this->repository = $repository;
    }
    public function index() {
        return $this->repository->test();
    }
}
