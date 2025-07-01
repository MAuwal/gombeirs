<?php

namespace App\DataTables;

// use App\Models\User;
use App\Models\Invoice;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;


class DueProcessInvoiceDataTable extends DataTable
{

    public function __construct()
    {
        parent::__construct();

        $this->model = Invoice::class;
    }
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        // Log::info('DataTable: Received query');

        $dataTable = (new EloquentDataTable($query))
            ->addColumn('action', function (Invoice $invoice) {
                return view('invoice2.columns._actions', compact('invoice'));
            })
            ->setRowId('id');

        // Log::info('DataTable: Returning dataTable instance');
        return $dataTable;
    }
    /**
     * Get the query source of dataTable.
     */
    public function query(Invoice $model): QueryBuilder
{
    return $model->newQuery()
        ->where('agency_name', 'PUBLIC PROCUREMENT BUREAU- DUE PROCESS')
        ->when(request()->filled('search.value'), function ($query) {
            $searchValue = request('search.value');

            $query->where(function ($subquery) use ($searchValue) {
                $subquery->where('taxpayer_name', 'like', "%$searchValue%")
                    ->orWhere('agency_name', 'like', "%$searchValue%")
                    ->orWhere('revenue_item_name', 'like', "%$searchValue%")
                    ->orWhere('status', 'like', "%$searchValue%")
                    ->orWhere('rate', 'like', "%$searchValue%")
                    ->orWhere('phone_number', 'like', "%$searchValue%")
                    ->orWhere('details', 'like', "%$searchValue%")
                    ->orWhere('address', 'like', "%$searchValue%")
                    ->orWhere('invoice_id', 'like', "%$searchValue%");
            });
        })
        ->orderBy('created_at', 'desc');
}



    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            // ->setTableId('users-table')
            ->setTableId('kt_datatable_responsive')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('lrtip')
            ->dom('rt' . "<'row'<'col-sm-12 col-md-5'l><'col-sm-12 col-md-7'p>>",)
            ->addTableClass('table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold')
            ->setTableHeadClass('text-start text-muted fw-bold fs-7 text-uppercase gs-0')
            ->orderBy(2)
            ->drawCallback("function() {" . file_get_contents(resource_path('views/pages//apps/user-management/users/columns/_draw-scripts.js')) . "}");
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('taxpayer_name')->title('Taxpayer Name')->searchable(),
            Column::make('agency_name')->title('Agency Name')->searchable(),
            Column::make('revenue_item_name')->title('Subhead Name')->searchable(),
            Column::make('rate')->title('Rate')->searchable(),
            Column::make('status')->title('Status')->searchable(),
            Column::make('phone_number')->title('Phone Number')->searchable(),
            Column::make('address')->title('Address')->searchable(),
            Column::make('details')->title('Details')->searchable(),
            
            Column::make('invoice_id')->title('Transaction Reference')->searchable(),
           Column::make('created_at')
            ->title('Date')
            ->addClass('text-nowrap')
            ->searchable()
            ->format(function($created_at) {
                return Carbon::parse($created_at)->format('Y-m-d');
            }),
            Column::computed('action')
                ->addClass('text-end text-nowrap')
                ->exportable(false)
                ->printable(false)
                ->width(60)
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Invoice_' . date('Ymd');
    }
}
