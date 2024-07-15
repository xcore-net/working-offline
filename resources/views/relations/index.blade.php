<div>
    <h3>{{$company->name}}</h3>
<table class="w-full table-auto text-left text-white">
                        <thead>
                            <tr class="text-left">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($branches as $branch)
                            <tr>
                                <td>{{ $branch->id }}</td>
                                <td>{{ $branch->name }}</td>
                                <td>{{ $branch->created_at }}</td>
                                <td>{{ $branch->updated_at }}</td>
                            </tr>

                            @empty

                            @endforelse
                        </tbody>
                    </table>

</div>