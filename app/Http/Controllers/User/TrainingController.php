<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\evaluasi_jawaban;
use App\Models\pelatihan;
use App\Models\progress;
use App\Models\progress_history;
use App\Models\test_jawaban;
use App\Models\test_soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history_user = progress_history::where('uid', Auth::id())->get()->last();
        $pelatihans = pelatihan::orderBy('id', 'asc')->get();
        $pelatihan_tes = pelatihan::where("type", "tes")->get();

        if (empty($history_user)) {
            $history_user = progress_history::create([
                'uid' => Auth::id(),
            ]);
        }

        $progresss = progress::where('id_progress_histories', $history_user->id)->get();

        // get nilai evaluasi
        $nilais = [];
        foreach ($progresss as $progress) {
            if (str_contains($progress->pelatihan->judul, 'Evaluasi')) {
                $nilai = 0;
                $Evaluasi_Jawaban = evaluasi_jawaban::where('id_progress', $progress->id)->get()->last();
                if (!empty($Evaluasi_Jawaban)) {
                    if (strtoupper($Evaluasi_Jawaban->jawaban1) == "STS") {
                        $nilai += 1;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "TS") {
                        $nilai += 2;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "R") {
                        $nilai += 3;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "S") {
                        $nilai += 4;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "SS") {
                        $nilai += 5;
                    }

                    if (strtoupper($Evaluasi_Jawaban->jawaban2) == "STS") {
                        $nilai += 1;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "TS") {
                        $nilai += 2;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "R") {
                        $nilai += 3;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "S") {
                        $nilai += 4;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "SS") {
                        $nilai += 5;
                    }

                    if (strtoupper($Evaluasi_Jawaban->jawaban3) == "STS") {
                        $nilai += 1;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "TS") {
                        $nilai += 2;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "R") {
                        $nilai += 3;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "S") {
                        $nilai += 4;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "SS") {
                        $nilai += 5;
                    }

                    if (strtoupper($Evaluasi_Jawaban->jawaban4) == "STS") {
                        $nilai += 1;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "TS") {
                        $nilai += 2;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "R") {
                        $nilai += 3;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "S") {
                        $nilai += 4;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "SS") {
                        $nilai += 5;
                    }

                    if (strtoupper($Evaluasi_Jawaban->jawaban5) == "STS") {
                        $nilai += 1;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "TS") {
                        $nilai += 2;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "R") {
                        $nilai += 3;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "S") {
                        $nilai += 4;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "SS") {
                        $nilai += 5;
                    }

                    if (strtoupper($Evaluasi_Jawaban->jawaban6) == "STS") {
                        $nilai += 1;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "TS") {
                        $nilai += 2;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "R") {
                        $nilai += 3;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "S") {
                        $nilai += 4;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "SS") {
                        $nilai += 5;
                    }

                    if (strtoupper($Evaluasi_Jawaban->jawaban7) == "STS") {
                        $nilai += 1;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "TS") {
                        $nilai += 2;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "R") {
                        $nilai += 3;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "S") {
                        $nilai += 4;
                    } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "SS") {
                        $nilai += 5;
                    }

                    array_push($nilais, $nilai);
                }
            }
        }


        return view('user.training', compact('progresss', 'pelatihans', 'nilais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // create progress

        $history_user = progress_history::where('uid', Auth::id())->get()->last();
        $progress = progress::where('id_progress_histories', $history_user->id)->where('id_pelatihan', $id)->get()->last();

        if (empty($progress)) {
            $progress = progress::create([
                'id_progress_histories' => $history_user->id,
                'id_pelatihan' => $id,
                'status' => 0,
            ]);
        }
        return view('user.submission', compact('progress'));
    }

    public function evaluation_test($id)
    {
        $pelatihan = pelatihan::findOrFail($id);
        $soal_eval = array(
            "Pelatihan ini bermanfaat bagi profesi saya sebagai guru.",
            "Materi pelatihan ini disampaikan dengan jelas.",
            "Aplikasi komputer dalam pelatihan ini mudah digunakan.",
            "Tugas atau aktivitas dalam pelatihan ini menarik untuk dilakukan.",
            "Waktu yang diberikan dalam pelatihan ini sesuai dengan jadwal saya.",
            "Secara keseluruhan saya puas dengan penyelenggaraan pelatihan ini.",
            "Saya berharap pelatihan semacam ini akan diselenggarakan lagi.",
        );

        // create progres
        $history_user = progress_history::where('uid', Auth::id())->get()->last();
        $progresss = progress::where('id_progress_histories', $history_user->id)->where('id_pelatihan', $id)->get();
        $progress = $progresss->last();

        $tesAttempt = 0;
        foreach ($progresss as $s) {
            $tesAttempt += 1;
        }

        if ($tesAttempt < 2) {
            if (!empty($progress->id) && $progress->status == 0) {
            } else {
                $progress = progress::create([
                    'id_progress_histories' => $history_user->id,
                    'id_pelatihan' => $id,
                    'status' => 0,
                ]);
            }
        }

        return view('user.evaluationSoal', compact('soal_eval', 'pelatihan', 'progress'));
    }

    public function evaluation_review($id)
    {
        $progress = progress::findOrFail($id);
        $pelatihan = $progress->pelatihan;
        $soal_eval = array(
            "Pelatihan ini bermanfaat bagi profesi saya sebagai guru.",
            "Materi pelatihan ini disampaikan dengan jelas.",
            "Aplikasi komputer dalam pelatihan ini mudah digunakan.",
            "Tugas atau aktivitas dalam pelatihan ini menarik untuk dilakukan.",
            "Waktu yang diberikan dalam pelatihan ini sesuai dengan jadwal saya.",
            "Secara keseluruhan saya puas dengan penyelenggaraan pelatihan ini.",
            "Saya berharap pelatihan semacam ini akan diselenggarakan lagi.",
        );

        // get nilai

        $nilai = 0;
        $Evaluasi_Jawaban = evaluasi_jawaban::where('id_progress', $progress->id)->get()->last();
        if (!empty($Evaluasi_Jawaban)) {
            if (strtoupper($Evaluasi_Jawaban->jawaban1) == "STS") {
                $nilai += 1;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "TS") {
                $nilai += 2;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "R") {
                $nilai += 3;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "S") {
                $nilai += 4;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban1) == "SS") {
                $nilai += 5;
            }

            if (strtoupper($Evaluasi_Jawaban->jawaban2) == "STS") {
                $nilai += 1;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "TS") {
                $nilai += 2;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "R") {
                $nilai += 3;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "S") {
                $nilai += 4;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban2) == "SS") {
                $nilai += 5;
            }

            if (strtoupper($Evaluasi_Jawaban->jawaban3) == "STS") {
                $nilai += 1;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "TS") {
                $nilai += 2;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "R") {
                $nilai += 3;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "S") {
                $nilai += 4;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban3) == "SS") {
                $nilai += 5;
            }

            if (strtoupper($Evaluasi_Jawaban->jawaban4) == "STS") {
                $nilai += 1;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "TS") {
                $nilai += 2;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "R") {
                $nilai += 3;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "S") {
                $nilai += 4;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban4) == "SS") {
                $nilai += 5;
            }

            if (strtoupper($Evaluasi_Jawaban->jawaban5) == "STS") {
                $nilai += 1;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "TS") {
                $nilai += 2;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "R") {
                $nilai += 3;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "S") {
                $nilai += 4;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban5) == "SS") {
                $nilai += 5;
            }

            if (strtoupper($Evaluasi_Jawaban->jawaban6) == "STS") {
                $nilai += 1;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "TS") {
                $nilai += 2;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "R") {
                $nilai += 3;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "S") {
                $nilai += 4;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban6) == "SS") {
                $nilai += 5;
            }

            if (strtoupper($Evaluasi_Jawaban->jawaban7) == "STS") {
                $nilai += 1;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "TS") {
                $nilai += 2;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "R") {
                $nilai += 3;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "S") {
                $nilai += 4;
            } else if (strtoupper($Evaluasi_Jawaban->jawaban7) == "SS") {
                $nilai += 5;
            }
        }

        return view('user.evaluationSoalReview', compact('soal_eval', 'pelatihan', 'progress', 'Evaluasi_Jawaban', 'nilai'));
    }

    public function test($id)
    {
        $pelatihan = pelatihan::findOrFail($id);
        $soal_tes = test_soal::where('id_pelatihan', $id)->get();

        // randomize choices
        $choices = [[]];
        foreach ($soal_tes as $soal) {
            $choice = [];
            array_push($choice, $soal->jawabanA);
            array_push($choice, $soal->jawabanB);
            array_push($choice, $soal->jawabanC);
            array_push($choice, $soal->jawabanD);
            array_push($choice, $soal->jawabanE);
            shuffle($choice);
            array_push($choices, $choice);
        }

        // create progress
        $history_user = progress_history::where('uid', Auth::id())->get()->last();
        $progresss = progress::where('id_progress_histories', $history_user->id)->where('id_pelatihan', $id)->get();
        $progress = $progresss->last();

        $tesAttempt = 0;
        foreach ($progresss as $s) {
            $tesAttempt += 1;
        }

        if ($tesAttempt < 2) {
            if (!empty($progress->id) && $progress->status == 0) {
            } else {
                $progress = progress::create([
                    'id_progress_histories' => $history_user->id,
                    'id_pelatihan' => $id,
                    'status' => 0,
                ]);
            }
        }
        return view('user.trainingSoal', compact('pelatihan', 'soal_tes', 'choices', 'progress'));
    }

    public function evaluation_test_store(Request $request)
    {
        evaluasi_jawaban::create([
            'id_progress' => $request->progressId,
            'jawaban1' => $request['1'],
            'jawaban2' => $request['2'],
            'jawaban3' => $request['3'],
            'jawaban4' => $request['4'],
            'jawaban5' => $request['5'],
            'jawaban6' => $request['6'],
            'jawaban7' => $request['7'],
            'pesan_kesan' => $request->pesan_kesan
        ]);

        //update progress
        $progress = progress::findOrFail($request->progressId);
        $progress->update([
            'status' => 1,
        ]);

        return redirect()->route('user.training.index');
    }

    public function test_store(Request $request)
    {
        $progress = progress::findOrFail($request->progressId);
        $soal_tes = test_soal::where('id_pelatihan', $progress->pelatihan->id)->get();

        foreach ($soal_tes as $soal) {
            test_jawaban::create([
                'id_progress' => $progress->id,
                'id_test_soal' => $soal->id,
                'jawaban' => $request[$soal->id]
            ]);
        }

        // update progress
        $progress->update([
            'status' => 1,
        ]);

        return redirect()->route('user.training.index');
    }

    public function submission_store(Request $request, $id)
    {
        // dd($request->uploaded_file);
        $progress = progress::findOrFail($id);

        // $data = $request->validate([
        //     'pdf' => 'required|mimes:zip,pdf|max:2048'
        // ]);
        // $data = $request;

        $pdfName = $request['uploaded_file']->getClientOriginalName() . '-' . time() . '.' . $request['uploaded_file']->extension();
        $request['uploaded_file']->storeAs(public_path('/submission'), $pdfName);

        // update progress
        $progress->update([
            'status' => 1,
            'path_submission' => $pdfName
        ]);

        return redirect()->route('user.training.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
