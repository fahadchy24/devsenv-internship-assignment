<?php

namespace App\Http\Controllers;

use App\Http\Requests\MagazineCreateRequest;
use App\Models\Magazine;
use App\Repositories\MagazineRepository;
use Illuminate\Http\Request;

class MagazineController extends Controller
{
    public function __construct(private MagazineRepository $magazineRepository)
    {
        $this->magazineRepository = $magazineRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = $this->magazineRepository->get();

        return view('index', compact('magazines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = [
            [
                "name" => "Entertainment",
            ],
            [
                "name" => "Lifestyle",
            ],
            [
                "name" => "Fashion",
            ],
        ];

        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MagazineCreateRequest $request)
    {
        $magazine = $this->magazineRepository->create($request->all());

        // dd($request->all());

        if (!empty($magazine)) {
            return redirect()->route('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $magazine = $this->magazineRepository->showBySlug($slug);

        return view('detail', compact('magazine'));
    }
}
