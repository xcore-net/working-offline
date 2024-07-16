<x-app-layout>
    <div>
        <h1 class="w-full text-center" style="font-size: 2em;">{{ $company->name }}</h1>
        <table class="w-full table-auto text-left text-black">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Company ID</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($branches as $branch)
                <tr>
                    <td>{{ $branch->id }}</td>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->created_at }}</td>
                    <td>{{ $branch->updated_at }}</td>
                    <td>{{ $branch->company_id }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">No branches found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        @foreach ($branches as $branch)
        <br />
        <h2 style="font-size: 1.25em;">{{$branch -> name}}'s employees</h2>
        <table class="w-full table-auto text-left text-black mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Branch ID</th>
                </tr>
            </thead>
            <tbody>
                @php
                $branchEmployees = $employees->filter(function ($employee) use ($branch) {
                return $employee->branch_id === $branch->id;
                });
                @endphp
                @forelse ($branchEmployees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->created_at }}</td>
                    <td>{{ $employee->updated_at }}</td>
                    <td>{{ $employee->branch_id }}</td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="4">No employees found for this branch.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        @endforeach
    </div>
</x-app-layout>