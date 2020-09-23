<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'users.actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
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
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('<B<"d-flex flex-column flex-sm-row justify-content-around justify-content-lg-between align-items-center my-2 flex-wrap"lfSr><"table-responsive-lg"t><"d-flex flex-column flex-sm-row justify-content-around justify-content-lg-between align-items-center my-2 flex-wrap"ip>>')
            ->languageUrl('https://cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json')
            ->orderBy(1)
            ->buttons(
                Button::make('create')->text('<i class="fa fa-plus"></i> Novo'),
                Button::make('export')->text('<i class="fa fa-download"></i> Exportar'),
                Button::make('reload')->text('<i class="fa fa-spinner"></i> Recarregar'),
                Button::make('colvis')->text('Colunas')
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
                ->title('')
                ->exportable(false)
                ->printable(false)
                ->width(60),
            Column::make('id')->title('ID'),
            Column::make('pessoa.name')->title('Nome'),
            Column::make('pessoa.documento')->title('Documento'),
            Column::make('email')->title('Email'),
            Column::make('created_at')->title('Criado em'),
            Column::make('updated_at')->title('Atualizado em'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}
