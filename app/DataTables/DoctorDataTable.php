<?php

namespace App\DataTables;

use App\Models\Doctor;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DoctorDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return dataTables()
            ->eloquent($query)
            ->addColumn('action', function($row){

                $action = '<div class="row">
                <a class="btn" id="show-user" data-toggle="modal" data-id='.$row->id.'><em class="fa fa-lg fa fa-eye color-blue">&nbsp;</em></a>
                <a class="btn" id="edit-user" data-toggle="modal" data-id='.$row->id.'><em class="fa fa-lg fa-pencil color-teal">&nbsp;</em></a>
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <a id="delete-user" data-id='.$row->id.' class="btn"><em class="fa fa-lg fa-remove color-red">&nbsp;</em></a>
                </div>';
                
                return $action;
                
                });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Doctor $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Doctor $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('doctor-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('print'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(110)
                  ->addClass('text-center')
                  ->title(__('doctors.action')),
            Column::make('id')->title('ID'),
            Column::make('specialty')->title(__('doctors.specialty')),
            Column::make('name')->title(__('doctors.name')),
            Column::make('lastname')->title(__('doctors.lastname')),
            Column::make('mobile')->title(__('doctors.mobile')),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Doctor_' . date('YmdHis');
    }
}
