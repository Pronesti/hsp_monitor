
<x-app-layout>

<header class="masthead text-center text-light">
    <div class="masthead-content">
        <div class="container mt-3">
            <h1 class="h1">{{Str::ucfirst($repository)}}</h1>
            <h2 class="h2">{{Str::ucfirst($partition)}}</h2>
        </div>
        <div class="container">
            <a href='http://ci.dlatv.net:8080/view/Service_Deploy/job/Service_Deploy_{{$repository}}_{{$partition}}' class="btn btn-dark mt-5">Jenkins</a>
        </div>
    </div>
</header>

<br>

<div class="alert alert-dark text-center mt-3" role="alert">
    PRODUCCION
</div>

<table border="1">
    <table data-toggle="table" class="table table-sm table-striped table-hover table-dark text-light">
        <thead>
            <tr>
                <th data-sortable="true" scope="col">Datacenter</td>
                <th data-sortable="true" scope="col">Partition</td>
                <th data-sortable="true" scope="col">Service</td>
                <th data-sortable="true" scope="col">Region</td>
                <th data-sortable="true" scope="col">Silo</td>
                <th data-sortable="true" scope="col">ENV</td>
                <th data-sortable="true" scope="col">TAG</td>
                <th data-sortable="true" scope="col">Build</td>
                <th data-sortable="true" scope="col">Result</td>
                <th scope="col">URL</td>
            </tr>
        </thead>

        @foreach($prod as $repo)
        <tr>
            <td>
                <p size="3">{{$repo->datacenter}}</p>
            </td>
            <td>
                <p size="3">{{$repo->partition}}</p>
            </td>
            <td>
                <p size="3">{{$repo->service}}</p>
            </td>
            <td>
                <p size="3">{{$repo->region}}</p>
            </td>
            <td>
                <p size="3">{{$repo->silo}}</p>
            </td>
            <td>
                <p size="3">{{$repo->env}}</p>
            </td>
            <td>
                <p size="3">{{$repo->tag}}</p>
            </td>
            <td>
                <p size="3">{{$repo->build}}</p>
            </td>
            <td>
            @if ($repo->result == 'SUCCESS')
                 <p class="text-success" size="3">{{$repo->result}}</p>
            @elseif  ($repo->result == 'FAILURE')
                <p class="text-danger" size="3">{{$repo->result}}</p>
            @elseif  ($repo->result == 'ABORTED')
                <p class="text-warning" size="3">{{$repo->result}}</p>
            @endif
            </td>
            <td><a target='_blank' class='link' href='{{$repo->url}}'>{{$repo->url}}</a></td>
            </td>
        </tr>

       @endforeach
    </table>
</table>

<div class="alert alert-dark text-center mt-3" role="alert">
    UAT
</div>

    <table border="1">
        <table data-toggle="table" class="table table-sm table-striped table-hover table-dark text-light">
            <thead>
                <tr>
                    <th data-sortable="true" scope="col">Datacenter</td>
                    <th data-sortable="true" scope="col">Partition</td>
                    <th data-sortable="true" scope="col">Service</td>
                    <th data-sortable="true" scope="col">Region</td>
                    <th data-sortable="true" scope="col">Silo</td>
                    <th data-sortable="true" scope="col">ENV</td>
                    <th data-sortable="true" scope="col">TAG</td>
                    <th data-sortable="true" scope="col">Build</td>
                    <th data-sortable="true" scope="col">Result</td>
                    <th scope="col">URL</td>
                </tr>
            </thead>

            @foreach($uat as $repo)
            <tr>
                <td>
                    <p size="3">{{$repo->datacenter}}</p>
                </td>
                <td>
                    <p size="3">{{$repo->partition}}</p>
                </td>
                <td>
                    <p size="3">{{$repo->service}}</p>
                </td>
                <td>
                    <p size="3">{{$repo->region}}</p>
                </td>
                <td>
                    <p size="3">{{$repo->silo}}</p>
                </td>
                <td>
                    <p size="3">{{$repo->env}}</p>
                </td>
                <td>
                    <p size="3">{{$repo->tag}}</p>
                </td>
                <td>
                    <p size="3">{{$repo->build}}</p>
                </td>
                <td>
                @if ($repo->result == 'SUCCESS')
                     <p class="text-success" size="3">{{$repo->result}}</p>
                @elseif  ($repo->result == 'FAILURE')
                    <p class="text-danger" size="3">{{$repo->result}}</p>
                @elseif  ($repo->result == 'ABORTED')
                    <p class="text-warning" size="3">{{$repo->result}}</p>
                @endif
                </td>
                <td><a target='_blank' class='link' href='{{$repo->url}}'>{{$repo->url}}</a></td>
                </td>
            </tr>

           @endforeach
        </table>
    </table>

</x-app-layout>
