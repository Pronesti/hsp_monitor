
<x-app-layout>
    <div class="alert alert-dark text-center mt-5" role="alert">
    PROGRAMADAS
    </div>

    <table border="1">
        <table data-toggle="table" class="table table-sm table-striped table-hover table-dark text-light">
            <thead>
                <tr>
                    <th data-sortable="true" scope="col">Inicio</td>
                    <th data-sortable="true" scope="col">Fin</td>
                    <th data-sortable="true" scope="col">SIC</td>
                    <th data-sortable="true" scope="col">TIPO</td>
                    <th data-sortable="true" scope="col">Descripcion</td>
                    <th data-sortable="true" scope="col">Responsable</td>
                    <th data-sortable="true" scope="col">Integrador</td>
                    <th data-sortable="true" scope="col">Estado</td>
                </tr>
            </thead>

            @foreach ($programadas as $jira)
            <tr>
                <td>
                    <p size="3">{{$jira->start}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->end}}</p>
                </td>
                <td>
                    <a class="text-light" href="https://dlatvarg.atlassian.net/browse/{{$jira->sic}}"><p size="3">{{$jira->sic}}</p></a>
                </td>
                <td>
                    <p size="3">{{$jira->repository}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->title}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->responsible}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->integrator ?? "Por asignar"}}</p>
                </td>
                <td>
                    @if ($jira->status == 0)
                        <a class="btn btn-warning text-light w-100">En Progreso</a>
                    @elseif ($jira->status == 1)
                        <a class="btn btn-success text-light w-100">Finalizado</a>
                    @elseif ($jira->status == 2)
                        <a class="btn btn-danger text-light w-100">Cancelado</a>
                    @elseif ($jira->status == 3)
                        <a class="btn btn-danger text-light w-100">Reprogramado</a>
                    @elseif ($jira->status == 4)
                        <a class="btn btn-info text-light w-100">Programado</a>
                    @elseif ($jira->status == 5)
                        <a class="btn btn-danger text-light w-100">Rollback</a>
                    @elseif ($jira->status == 6)
                        <a class="btn btn-danger text-light w-100">Pendiente por Aprovacion</a>
                    @elseif ($jira->status == 7)
                        <a class="btn btn-danger text-light w-100">Deployed</a>
                    @elseif ($jira->status == 10)
                        <a class="btn btn-success text-light w-100">Finalizado</a>
                    @else
                    <p> {{$jira->status}} </p>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </table>

    <div class="alert alert-dark text-center mt-3" role="alert">
    EMERGENTES
    </div>

    <table border="1">
        <table data-toggle="table" class="table table-sm table-striped table-hover table-dark text-light">
            <thead>
                <tr>
                    <th data-sortable="true" scope="col">Inicio</td>
                    <th data-sortable="true" scope="col">Fin</td>
                    <th data-sortable="true" scope="col">SIC</td>
                    <th data-sortable="true" scope="col">TIPO</td>
                    <th data-sortable="true" scope="col">Descripcion</td>
                    <th data-sortable="true" scope="col">Responsable</td>
                    <th data-sortable="true" scope="col">Integrador</td>
                    <th data-sortable="true" scope="col">Estado</td>
                </tr>
            </thead>

            @foreach ($emergentes as $jira)
            <tr>
                <td>
                    <p size="3">{{$jira->start}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->end}}</p>
                </td>
                <td>
                    <a class="text-light" href="https://dlatvarg.atlassian.net/browse/{{$jira->sic}}"><p size="3">{{$jira->sic}}</p></a>
                </td>
                <td>
                    <p size="3">{{$jira->repository}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->title}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->responsible}}</p>
                </td>
                <td>
                    <p size="3">{{$jira->integrator ?? "Por asignar"}}</p>
                </td>
                <td>
                    @if ($jira->status == 0)
                        <a class="btn btn-warning text-light w-100">En Progreso</a>
                    @elseif ($jira->status == 1)
                        <a class="btn btn-success text-light w-100">Finalizado</a>
                    @elseif ($jira->status == 2)
                        <a class="btn btn-danger text-light w-100">Cancelado</a>
                    @elseif ($jira->status == 3)
                        <a class="btn btn-danger text-light w-100">Reprogramado</a>
                    @elseif ($jira->status == 4)
                        <a class="btn btn-info text-light w-100">Programado</a>
                    @elseif ($jira->status == 5)
                        <a class="btn btn-danger text-light w-100">Rollback</a>
                    @elseif ($jira->status == 6)
                        <a class="btn btn-danger text-light w-100">Pendiente por Aprovacion</a>
                    @elseif ($jira->status == 7)
                        <a class="btn btn-danger text-light w-100">Deployed</a>
                    @elseif ($jira->status == 10)
                        <a class="btn btn-success text-light w-100">Finalizado</a>
                    @else
                    <p> {{$jira->status}} </p>
                    @endif
                </td>
            </tr>
            @endforeach
        </table>
    </table>

</x-app-layout>
