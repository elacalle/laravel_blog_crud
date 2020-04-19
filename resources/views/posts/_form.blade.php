@csrf
<label for="title">Title</label>
<input type="text" value="{{ old('title', $post->title) }}" name="title">
<label for="content">Content</label>
<input type="text" value="{{ old('content', $post->content) }}" name="content">

@if (count($errors))
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
        <p class="font-bold">Be Warned</p>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<select name="tags[]" class="" id="" multiple>
    @foreach ($tags as $tag)
        <option value="{{$tag->id}}">{{ $tag->name }}</option>
    @endforeach
</select>
