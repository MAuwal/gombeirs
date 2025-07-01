<?php

namespace App\DataTables;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class InvoiceDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            // ->addColumn('action', 'invoices.view')
            ->addColumn('action', 'invoice.action')
        //   ->addColumn('action', 'invoice.action')
        //   ->editColumn('id', function ($invoice) {
        //       return '<a href="' . route('invoices.view', $invoice->id) . '" class="btn btn-primary">View</a>';
        //   })
            ->smart(true)
            ->setRowId('id');
            
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Invoice $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Configure the HTML builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('kt_datatable_responsive')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                // Button::make('excel'),
                // Button::make('csv'),
                // Button::make('pdf'),
                // Button::make('print'),
                // Button::make('reset'),
                // Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
                    
            Column::make('id')->title('ID'),
            Column::make('taxpayer_name')->title('Taxpayer Name'),
            Column::make('agency_name')->title('Agency Name'),
            Column::make('revenue_item_name')->title('Subhead Name'),
            Column::make('rate')->title('Rate'),
            Column::make('transaction_ref')->title('Transaction Reference'),
            Column::make('created_at')->title('Date')->addClass('text-nowrap'),
            Column::computed('action')
            ->addClass('text-end text-nowrap')
            ->exportable(false)
            ->printable(false)
            ->width(120)
            // ->view('invoices.action') // Assuming you have a Blade view named 'action.blade.php'
            // ->editField('id', 'invoices.edit') // Assuming you have a route named 'invoices.edit'
            // ->editField('id', function ($invoice) {
                // return route('invoices.edit', $invoice->id);
            // })
            ->viewField('id', 'invoices.view') // Assuming you have a route named 'invoices.view'
            ->viewField('id', function ($invoice) {
                return route('invoices.view', $invoice->id);
            }),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Invoice_' . date('YmdHis');
    }
}
