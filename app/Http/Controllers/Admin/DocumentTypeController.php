<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDocumentTypeRequest;
use App\Http\Requests\StoreDocumentTypeRequest;
use App\Http\Requests\UpdateDocumentTypeRequest;
use App\Models\DocumentType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DocumentTypeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('document_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = DocumentType::query()->select(sprintf('%s.*', (new DocumentType)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'document_type_show';
                $editGate      = 'document_type_edit';
                $deleteGate    = 'document_type_delete';
                $crudRoutePart = 'document-types';

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
            $table->editColumn('value', function ($row) {
                return $row->value ? $row->value : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('description', function ($row) {
                return $row->description ? $row->description : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.documentTypes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('document_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.documentTypes.create');
    }

    public function store(StoreDocumentTypeRequest $request)
    {
        $documentType = DocumentType::create($request->all());

        return redirect()->route('admin.document-types.index');
    }

    public function edit(DocumentType $documentType)
    {
        abort_if(Gate::denies('document_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.documentTypes.edit', compact('documentType'));
    }

    public function update(UpdateDocumentTypeRequest $request, DocumentType $documentType)
    {
        $documentType->update($request->all());

        return redirect()->route('admin.document-types.index');
    }

    public function show(DocumentType $documentType)
    {
        abort_if(Gate::denies('document_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.documentTypes.show', compact('documentType'));
    }

    public function destroy(DocumentType $documentType)
    {
        abort_if(Gate::denies('document_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $documentType->delete();

        return back();
    }

    public function massDestroy(MassDestroyDocumentTypeRequest $request)
    {
        DocumentType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
