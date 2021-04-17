@can($viewGate)
    <a class="btn btn-xs btn-primary" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
        {{ trans('global.view') }}
    </a>
@endcan
@can($editGate)
    @if (!$row->isEditOver() || auth()->user()->can('document_grand_access'))
        <a class="btn btn-xs btn-info" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
            {{ trans('global.edit') }}
        </a>
    @endif
@endcan
@can($deleteGate)
    @if (!$row->isEditOver() || auth()->user()->can('document_grand_access'))
        <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
        </form
    @endif
@endcan
