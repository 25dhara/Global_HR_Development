@extends('layouts.app')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">

            <div class="d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h2 class="main-content-title fs-24 mb-1">Branch</h2>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Advanced UI</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Branch</li>
                    </ol>
                </div>

            </div>
            <div class="row row-sm">
                <div class="col-xl-6">

                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Edit Branch
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('branch.update',$branch->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="form-text" class="form-label fs-14 text-dark">Branch name</label>
                                    <input type="name" class="form-control @error('name') is-invalid @enderror"
                                        id="name" placeholder="Enter name" name="name" value="{{ $branch->name }}">
                                    @error('name')
                                        <span class="error invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="switch-primary"  name="is_active" {{ $branch->is_active == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="switch-primary">Active</label>
                                </div>

                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                        <div class="card-footer d-none border-top-0">
                            <!-- Prism Code -->
                            <pre class="language-html"><code class="language-html">&lt;div class="mb-3"&gt;
&lt;label for="form-text" class="form-label fs-14 text-dark"&gt;Enter name&lt;/label&gt;
&lt;input type="text" class="form-control" id="form-text" placeholder=""&gt;
&lt;/div&gt;
&lt;div class="mb-3"&gt;
&lt;label for="form-password" class="form-label fs-14 text-dark"&gt;Enter
Password&lt;/label&gt;
&lt;input type="password" class="form-control" id="form-password" placeholder=""&gt;
&lt;/div&gt;
&lt;div class="form-check mb-3"&gt;
&lt;input class="form-check-input" type="checkbox" value="" id="invalidCheck"
required=""&gt;
&lt;label class="form-check-label" for="invalidCheck"&gt;
Accept Policy
&lt;/label&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary" type="submit"&gt;Submit&lt;/button&gt;</code></pre>
                            <!-- Prism Code -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
