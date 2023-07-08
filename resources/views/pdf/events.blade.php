<table class="table table-bordered table-striped datatable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Program</th>
            <th>Peringkat</th>
            <th>Maklumat</th>
            <th>Tarikh</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $index => $event)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->level }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->date }}</td>
                <td>
                    <button class="btn btn-default btn-sm btn-icon icon-left btn-edit" data-id="{{ $event->id }}"><i class="entypo-pencil"></i>Ubah</button>
                    <button class="btn btn-danger btn-sm btn-icon icon-left btn-delete" data-id="{{ $event->id }}"><i class="entypo-cancel"></i>Padam</button>
                    <button class="btn btn-info btn-sm btn-icon icon-left btn-view" data-id="{{ $event->id }}"><i class="entypo-info"></i>Lihat</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
