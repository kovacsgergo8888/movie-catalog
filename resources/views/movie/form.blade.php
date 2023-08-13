<x-layout.app>
    <form action="/movies" method="POST">
        @csrf
        <input type="text" name="title"/>
        <button type="submit">submit</button>
    </form>
</x-layout.app>
