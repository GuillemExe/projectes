<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
        <form action="{{ route('projectes.index') }}" method="GET">
            <input class="btn mt-4 btn-warning justify-content-center font-weight-bold text-dark" type="submit" value="Projectes holi"/>
        </form>
    </h5>
    <a class="btn btn-outline-primary" href="{!! url('/projectes'); !!}">Registrar projectes</a>
</div>