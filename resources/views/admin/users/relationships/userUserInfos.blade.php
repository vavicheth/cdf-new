<div class="m-3">
    @can('user_info_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.user-infos.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.userInfo.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.userInfo.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-userUserInfos">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.user') }}
                            </th>
                            <th>
                                {{ trans('cruds.user.fields.email') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.title') }}
                            </th>
                            <th>
                                {{ trans('cruds.title.fields.name_kh') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.position') }}
                            </th>
                            <th>
                                {{ trans('cruds.position.fields.name_kh') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.department') }}
                            </th>
                            <th>
                                {{ trans('cruds.department.fields.name_kh') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.name_kh') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.gender') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.dob') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.userInfo.fields.photo') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($userInfos as $key => $userInfo)
                            <tr data-entry-id="{{ $userInfo->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $userInfo->id ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->user->name ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->user->email ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->title->name ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->title->name_kh ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->position->name ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->position->name_kh ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->department->name ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->department->name_kh ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->name_kh ?? '' }}
                                </td>
                                <td>
                                    {{ App\Models\UserInfo::GENDER_SELECT[$userInfo->gender] ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->dob ?? '' }}
                                </td>
                                <td>
                                    {{ $userInfo->phone ?? '' }}
                                </td>
                                <td>
                                    @if($userInfo->photo)
                                        <a href="{{ $userInfo->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                            <img src="{{ $userInfo->photo->getUrl('thumb') }}">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @can('user_info_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.user-infos.show', $userInfo->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('user_info_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.user-infos.edit', $userInfo->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('user_info_delete')
                                        <form action="{{ route('admin.user-infos.destroy', $userInfo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_info_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.user-infos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-userUserInfos:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection