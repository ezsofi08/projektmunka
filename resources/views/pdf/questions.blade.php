@foreach ($questions as $qu)

    <h1 class="pdf_title">Kérdőív</h1>
    <br>
    <br>
    <p class="pdf_content"> {{ $qu -> reason}}</p>
    <p class="pdf_content"> {{ $qu-> complain}}</p>
    <p class="pdf_content">{{ $qu-> time}}</p>
    <p class="pdf_content">{{ $qu-> braces}}</p>
    <p class="pdf_content">{{ $qu-> medicine}}</p>
   </div>
@endforeach