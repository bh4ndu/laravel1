<style>
    table {
        width: 100%;
        border: 3px solid black;
        border-collapse: collapse;
        

    }

    th {
        background-color: rgb(131, 121, 121);
        color: rgb(184, 238, 103);
        border: 2px solid black;
        border-collapse: collapse;
        padding: 10px;
    }

    td {
        background-color: rgba(0, 191, 255, 0.918);
        color: rgb(255, 255, 255);
        border: 2px solid black;
        border-collapse: collapse;
        padding: 10px;

    }

</style>

<table>
   <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Nombre</th>
        <th>Apellido</th>
   </tr>
   @foreach ($oficinas as $oficina)
   <tr>
        <td>{{ $oficina->addressLine1 }}</td>
        <td>Potter</td>
        <td>Juancio</td>
        <td>Potter</td>
        <td>Juancio</td>
        <td>Potter</td>
        <td>Juancio</td>
        <td>Potter</td>
   </tr>
   @endforeach
</table>