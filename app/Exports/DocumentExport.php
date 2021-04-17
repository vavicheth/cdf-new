<?php

namespace App\Exports;

use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class DocumentExport implements FromView
{
    use Exportable;
////    use HeadingRowFormatter;
    protected $documents;
    protected $users;
//
    public function __construct($documents,$users)
    {
        $this->documents = $documents;
        $this->users=$users;
    }
//
//    public function view(): View
//    {
//        return view('components.exports.table-view', [
//            'items' => $this->items,'headers'=>$this->header,
//        ]);
//    }


    public function view(): View
    {
        return view('admin.documents.includes.print', [
            'document' => $this->documents,'users'=>$this->users
        ]);
    }
}
