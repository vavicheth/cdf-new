@extends('layouts.admin')

@section('styles')
    <style>
        .bg-light-info{
            background-color: #CCF5FE  !important;
        }
        .bg-light-warning{
            background-color: #FFE5D1  !important;
        }
        .bg-light-success{
            background-color: #D3FFD1  !important;
        }
    </style>
@endsection

@section('content')
@can('document_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.documents.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.document.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.document.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{ route("admin.documents.index") }}?active=1" class="btn btn-primary {{Request::get('active') ? 'active': ''}}">Active</a>
        {{--        @if (!auth()->user()->can('comment_status_view'))--}}
        {{--            <a href="{{ route("admin.documents.index") }}?comment=1" class="btn btn-primary {{Request::get('comment') ? 'active': ''}}">Commented</a>--}}
        {{--        @endif--}}
        <a href="{{ route("admin.documents.index") }}?close=1" class="btn btn-primary {{Request::get('close') ? 'active': ''}}">Closed</a>
        <a href="{{ route("admin.documents.index") }}?show_all" class="btn btn-primary {{Request::get('show_all') ? 'active': ''}}">All</a>
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Document">
            <thead>
                <tr >
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.document.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.document.fields.letter_code') }}
                    </th>
                    <th>
                        {{ trans('cruds.document.fields.code_in') }}
                    </th>
{{--                    <th>--}}
{{--                        {{ trans('cruds.document.fields.code_out') }}--}}
{{--                    </th>--}}
                    <th>
                        {{ trans('cruds.document.fields.document_code') }}
                    </th>
{{--                    <th>--}}
{{--                        {{ trans('cruds.document.fields.category') }}--}}
{{--                    </th>--}}
                    <th>
                        {{ trans('cruds.document.fields.from_organisation') }}
                    </th>
{{--                    <th>--}}
{{--                        {{ trans('cruds.document.fields.organisation') }}--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        {{ trans('cruds.document.fields.user') }}--}}
{{--                    </th>--}}
                    <th>
                        {{ trans('cruds.document.fields.description') }}
                    </th>
                    <th>
                        {{ trans('cruds.document.fields.document_file') }}
                    </th>
{{--                    <th>--}}
{{--                        {{ trans('cruds.document.fields.document_type') }}--}}
{{--                    </th>--}}
                    <th>
                        {{ trans('cruds.document.fields.dateline') }}
                    </th>
{{--                    <th>--}}
{{--                        {{ trans('cruds.document.fields.date_complete') }}--}}
{{--                    </th>--}}
{{--                    <th>--}}
{{--                        {{ trans('cruds.document.fields.complete') }}--}}
{{--                    </th>--}}
                    <th>
                        {{ trans('cruds.document.fields.submit') }}
                    </th>
                    <th width="10%" style="padding: 1px !important; text-align: center">
                    </th>
                </tr>
{{--                <tr>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">--}}
{{--                    </td>--}}
{{--                    <td width="10%" style="padding: 1px !important; text-align: center">--}}
{{--                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <select class="search">--}}
{{--                            <option value>{{ trans('global.all') }}</option>--}}
{{--                            @foreach($categories as $key => $item)--}}
{{--                                <option value="{{ $item->name }}">{{ $item->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <select class="search">--}}
{{--                            <option value>{{ trans('global.all') }}</option>--}}
{{--                            @foreach($organisations as $key => $item)--}}
{{--                                <option value="{{ $item->name }}">{{ $item->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <select class="search">--}}
{{--                            <option value>{{ trans('global.all') }}</option>--}}
{{--                            @foreach($users as $key => $item)--}}
{{--                                <option value="{{ $item->name }}">{{ $item->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <select class="search">--}}
{{--                            <option value>{{ trans('global.all') }}</option>--}}
{{--                            @foreach($document_types as $key => $item)--}}
{{--                                <option value="{{ $item->name }}">{{ $item->name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                    </td>--}}
{{--                </tr>--}}
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('document_delete_all')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.documents.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.documents.index') }}{{ request('active') == 1 ? '?active=1':''}}{{request('close') == 1 ? '?close=1':''}}{{ request('show_all') == 1 ? '?show_all=1':''}}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id','visible':false },
{ data: 'letter_code', name: 'letter_code' },
{ data: 'code_in', name: 'code_in' },
// { data: 'code_out', name: 'code_out' },
{ data: 'document_code', name: 'document_code' },
// { data: 'category_name', name: 'category.name' },
{ data: 'from_organisation', name: 'from_organisation' },
// { data: 'organisation_name', name: 'organisation.name' },
// { data: 'user', name: 'users.name' },
{ data: 'description', name: 'description' },
{ data: 'document_file', name: 'document_file', sortable: false, searchable: false },
// { data: 'document_type_name', name: 'document_type.name' },
{ data: 'dateline', name: 'dateline' },
// { data: 'date_complete', name: 'date_complete' },
// { data: 'complete', name: 'complete' },
{ data: 'submit', name: 'submit' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Document').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
});

</script>
@endsection
