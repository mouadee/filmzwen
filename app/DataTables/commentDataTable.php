<?php

namespace App\DataTables;

use App\DataTables\commentDataTable;
use Yajra\DataTables\Services\DataTable;
use App\User;
use App\Comments;

class commentDataTable extends DataTable
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
            ->editColumn('created_at', '{{ admin()->user()->created_at->diffForHumans() }}')
            ->addColumn('delete', 'admin.admins.btn.delete_user')
            ->rawColumns([
                'delete',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Comments $model)
    {
        return Comments::query();
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
                            ['extend' => 'reload', 'className'=>'btn btn-success', 'text' => '<i class="fa fa-refresh"></i>' . ' ' .trans("admin.Reload")],
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
                'name'  => 'comment',
                'data'  => 'comment',
                'title' => trans('admin.comment'),
            ],[
                'name'  => 'comment_id',
                'data'  => 'comment_id',
                'title' => trans('admin.comment.id'),
            ],[
                'name'  => 'created_at',
                'data'  => 'created_at',
                'title' => trans('admin.created_at'),
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
        return 'comment_' . date('YmdHis');
    }
}
