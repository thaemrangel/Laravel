  {{-- @break($key == 2) | Breaks the loop
  @continue($key == 1) | Continues after the key --}}

  @if ($loop->even)
      <div>{{ $key }}.{{ $post['title'] }}</div>
  @else
      <div style="background-color: silver">
          {{ $key }}.{{ $post['title'] }}
      </div>
  @endif
