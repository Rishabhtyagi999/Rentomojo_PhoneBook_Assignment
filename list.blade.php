<?php
/**
 * Created by PhpStorm.
 * User: Monty
 * Date: 21-07-2015
 * Time: 13:51
 */
?>
@extends('app')

@section('content')
    <!--
    =================================
    INNER SECTION
    =================================
    -->
    <section id="inner" class="inner-section section">
      

            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">Contacts</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="1s">View your all contacs here.</p>
                </div>
            </div>

            <div class="inner-wrapper row">
                <div class="col-md-12">

                    @include('parts/flash')

                    <a href="{{ url('/contacts/add') }}" class="btn btn-primary" style="margin-bottom: 30px;">Add New contact</a>

                    <!-- Table Starts Here -->
                    <table id="contacts" class="table table-bordered table-responsive table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Date Created</th>
                            <th>Notes</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->phone }}</td>
                                 <td>{{ date("Y-m-d",strtotime($contact->created_at)) }}</td>
                                <td>{{ $contact->notes }}</td>
                                <td><a href="{{ url('contacts/edit', $contact->id) }}" data-toggle="tooltip"  title="Edit"><i alt="Edit" class="fa fa-pencil">Edit</i></a> |
                                <a href="{{ url('contacts/delete', $contact->id) }}" data-toggle="tooltip"  title="Delete"><i alt="Delete" class="fa fa-trash">Delete</i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Table Ends Here -->

                </div>
            </div>

        
    </section>
@endsection

@section('inline_js')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#contacts').DataTable();
        });
    </script>
@endsection