@extends('layouts.main')
    @section('title','Board')
    @section('header-message')
        <h2 style="margin-top:0;">Bandeja de asignaciones</h2> 
    @endsection
    
    @section('container')
       
         <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Tipo</th>
                <th>Motivo</th>
                <th>Observación</th>
                <th>Bandeja asignada</th>
                <th>Registrado</th>
                <th>Vencimiento</th>
              </tr>
            </thead>
            <tbody>
              @foreach($assignments as $asig)
                <tr>
                <td>{{ $asig->numero }}</td>
                <td>{{ $asig->tipo_reclamo  }}</td>
                <td>{{ $asig->motivo_reclamo  }}</td>
                <td>{{ $asig->observacion  }}</td>
                <td>{{ $asig->bandeja_asig  }}</td>
                <td>{{ $asig->fecha_reclamo  }}</td>
                <td>{{ $asig->fecha_vencimiento  }}</td>
              </tr>
              @endforeach
              
              
            </tbody>
          </table>
          {{ $assignments->render()  }}
       
    @endsection
    
    
    
    