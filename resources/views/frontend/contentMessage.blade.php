<div class="message-wrapper">
    <ul class="messages">
      @foreach($messages as $message)
      <li class="message clearfix">
        <div class="{{ ($message->from == Auth::id())?'sent':'received'}}">
            <p>{{ $message->message }}</p>
            <p class="date">{{ date('d-m-Y, h:i a', strtotime($message->created_at)) }}</p>
        </div>
    </li>
    @endforeach
</ul>
</div>
<div class="input-text">
    <input type="text" name="message" class="submit mb-2">
</div>