<?php

namespace App\DataTables;

use App\Admin;
use App\DataTables\adminDatatable;
use Yajra\DataTables\Services\DataTable;

class adminDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('edit', 'admin.admins.btn.edit')
            ->editColumn('updated_at', '{{ admin()->user()->updated_at->diffForHumans() }}')
            ->editColumn('created_at', '{{ admin()->user()->created_at->diffForHumans() }}')
            ->addColumn('delete', 'admin.admins.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
            ]);
            
    }   

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Admin::query();
    }


   

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->addAction(['width' => '80px'])
                    //->parameters($this->getBuilderParameters());
                    ->parameters([
                        'dom' => 'Blfrtip',
                        'lenghtMenu' => [[10,25,50,100], [10,25,50,'All Records']],
                        'buttons' => [
                            ['extend' => 'print', 'className'=>'btn btn-primary', 'text' => '<i class="fa fa-print"></i>'.trans("admin.print")],
                            ['extend' => 'csv', 'className'=>'btn btn-success', 'text' => '<i class="fa fa-file"></i>' .trans("admin.ex_csv")],
                            ['extend' => 'reload', 'className'=>'btn btn-danger', 'text' => '<i class="fa fa-refresh"></i>' .trans("admin.Reload")],
                            ['text' => '<i class="fa fa-plus"></i>' . trans('admin.Create_Admin'),'className'=>'btn btn-info'],
                        ],
                        
                        'language' => [ 
                            'sProcessing'     => trans('admin.sProcessing'),
                            'sLengthMenu'     => trans('admin.sLengthMenu'),
                            'sZeroRecords'    => trans('admin.sZeroRecords'),
                            'sEmptyTable'     => trans('admin.sEmptyTable'),
                            'sInfo'           => trans('admin.sInfo'),
                            'sInfoEmpty'      => trans('admin.sInfoEmpty'),
                            'sInfoFiltered'   => trans('admin.sInfoFiltered'),
                            'sInfoPostFix'    => trans('admin.sInfoPostFix'),
                            'sSearch'         => trans('admin.sSearch'),
                            'sUrl'            => trans('admin.sUrl'),
                            'sInfoThousands'  => trans('admin.sInfoThousands'),
                            'sLoadingRecords' => trans('admin.sLoadingRecords'),
                            'oPaginate'       => [
                                'sFirst'         => trans('admin.sFirst'),
                                'sLast'          => trans('admin.sLast'),
                                'sNext'          => trans('admin.sNext'),
                                'sPrevious'      => trans('admin.sPrevious'),
                            ],
                            'oAria'            => [
                                'sSortAscending'  => trans('admin.sSortAscending'),
                                'sSortDescending' => trans('admin.sSortDescending'),
                            ],

                    ],
                ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'name'  => 'id',
                'data'  => 'id',
                'title' => trans('admin.ID'),
            ],[
                'name'  => 'name',
                'data'  => 'name',
                'title' => trans('admin.name'),
            ],[
                'name'  => 'email',
                'data'  => 'email',
                'title' => trans('admin.email'),
            ],[
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => trans('admin.created_at'),
            ],[
                'name'          => 'edit',
                'data'          => 'edit',
                'title'         => trans('admin.edit'),
                'export table'  => false,
                'print table'   => false,
                'ordrerable'    => false,
                'searchable'    => false,
            ],[
                'name'          => 'delete',
                'data'          => 'delete',
                'title'         => trans('admin.delete'),
                'export table'  => false,
                'print table'   => false,
                'ordrerable'    => false,
                'searchable'    => false,
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'admin_' . date('YmdHis');
    }
}
