<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Repositories\TestRepository;
use App\Http\Controllers\AppBaseController;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Response;

class TestController extends AppBaseController
{
    /** @var TestRepository $testRepository*/
    private $client;
    private $cursos;

    private $testRepository;

    public function __construct(TestRepository $testRepo)
    {
        $this->testRepository = $testRepo;
        $this->client = new Client(['base_uri' => 'https://jsonplaceholder.typicode.com/']);
    }

    /**
     * Display a listing of the Test.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        // $response = $this->client->request('GET', 'posts');
        $response = json_decode($response->getBody()->getContents());
        // return $response->json();
        return view('tests.index',compact('response'));
    }

    /**
     * Show the form for creating a new Test.
     *
     * @return Response
     */
    public function create()
    {
        return view('tests.create');
    }

    /**
     * Store a newly created Test in storage.
     *
     * @param CreateTestRequest $request
     *
     * @return Response
     */
    public function store(CreateTestRequest $request)
    {
        $input = $request->all();

        $test = $this->testRepository->create($input);

        Flash::success('Test saved successfully.');

        return redirect(route('tests.index'));
    }

    /**
     * Display the specified Test.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        return view('tests.show')->with('test', $test);
    }

    /**
     * Show the form for editing the specified Test.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        return view('tests.edit')->with('test', $test);
    }

    /**
     * Update the specified Test in storage.
     *
     * @param int $id
     * @param UpdateTestRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestRequest $request)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        $test = $this->testRepository->update($request->all(), $id);

        Flash::success('Test updated successfully.');

        return redirect(route('tests.index'));
    }

    /**
     * Remove the specified Test from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $test = $this->testRepository->find($id);

        if (empty($test)) {
            Flash::error('Test not found');

            return redirect(route('tests.index'));
        }

        $this->testRepository->delete($id);

        Flash::success('Test deleted successfully.');

        return redirect(route('tests.index'));
    }
}
