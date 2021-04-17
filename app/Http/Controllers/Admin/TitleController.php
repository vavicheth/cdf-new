<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTitleRequest;
use App\Http\Requests\StoreTitleRequest;
use App\Http\Requests\UpdateTitleRequest;
use App\Models\Title;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TitleController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('title_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Title::query()->select(sprintf('%s.*', (new Title)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'title_show';
                $editGate      = 'title_edit';
                $deleteGate    = 'title_delete';
                $crudRoutePart = 'titles';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('name_kh', function ($row) {
                return $row->name_kh ? $row->name_kh : "";
            });
            $table->editColumn('abr', function ($row) {
                return $row->abr ? $row->abr : "";
            });
            $table->editColumn('abr_kh', function ($row) {
                return $row->abr_kh ? $row->abr_kh : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });
            $table->editColumn('is_active', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->is_active ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'is_active']);

            return $table->make(true);
        }

        return view('admin.titles.index');
    }

    public function create()
    {
        abort_if(Gate::denies('title_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.titles.create');
    }

    public function store(StoreTitleRequest $request)
    {
        $title = Title::create($request->all());

        return redirect()->route('admin.titles.index');
    }

    public function edit(Title $title)
    {
        abort_if(Gate::denies('title_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.titles.edit', compact('title'));
    }

    public function update(UpdateTitleRequest $request, Title $title)
    {
        $title->update($request->all());

        return redirect()->route('admin.titles.index');
    }

    public function show(Title $title)
    {
        abort_if(Gate::denies('title_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.titles.show', compact('title'));
    }

    public function destroy(Title $title)
    {
        abort_if(Gate::denies('title_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $title->delete();

        return back();
    }

    public function massDestroy(MassDestroyTitleRequest $request)
    {
        Title::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
