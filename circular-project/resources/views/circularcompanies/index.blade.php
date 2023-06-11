@extends('components.layout')

@section('content')
    <x-success />
    <x-fail />

    <div class="companies-table-container">
        <div class="table-container">
            <h1 class="text-3xl font-bold mb-5 p-2 pb-5 text-center">Companies</h1>
            <div class="table-content">
                <table class="companies-table">
                    <thead>
                        <tr>
                            <th class="header-table-company">Company</th>
                            <th class="header-table-type">Type</th>
                            <th class="header-table-address">Address</th>
                            <th class="header-table-country">Country</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($companies as $company)
                            <tr>
                                <td class="table-companies-name">
                                    {{ $company->name }}</td>
                                <td class="table-companies-type">
                                    {{ $company->type }}
                                </td>
                                <td class="table-companies-address">
                                    {{ $company->address }}
                                </td>
                                <td class="table-companies-country">
                                    {{ $company->country }}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
