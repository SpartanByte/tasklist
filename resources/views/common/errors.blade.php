<!-- resources/views/common/errors.blade.php
    Basic Task List - Tutorial 
    https://laravel.com/docs/5.1/quickstart -->

    @if(count($errors) > 0)

        <!-- Form Error List -->
        <div class="alert alert-danger">

            <strong>Ahh nuts!! Something went wrong!</strong>

            <br /><br />

            <ul>

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>
    @endif