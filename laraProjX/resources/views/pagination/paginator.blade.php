<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" rel="stylesheet">
      
<style>
    
*{
margin: 0;
padding: 0;
text-decoration: none;
box-sizing: border-box;
font-family: "Open Sans", sans-serif;
}

.body{
background: #f1f1f1;
}

.pagination{
top:50%;
width: 100%;
text-align: center;
}

.pagination a{
margin: 5px auto;
display :inline-block;
width: 60px;
background: #afafaf;
height: 30px;
line-height: 30px;
color: #fff;
font-weight:600;
transition: 0.3s;
}

.prev,.next{
}

.pagination a:hover{
color: #F75D59;
}

.active{
color: #F75D59 !important;
}

.prev{
border-radius: 30px 0 0 30px;
}

.next{
border-radius: 0 30px 30px 0;
}

.num{
}

</style>

<div class="pagination">
    
@if ($paginator->lastPage() != 1)
    @if ($paginator->currentPage() != 1)
    <a href="{{ $paginator->previousPageUrl() }}" class="prev"><i class="fas fa-angle-left"></i></a> 
    @else
        <a class="prev"><i class="fas fa-angle-left"></i></a> 
    @endif
    
    @if (!$paginator->onFirstPage())
    <a href="{{ $paginator->url(1) }}" class="num">Inizio</a> 
    @else
        <a class="num">Inizio</a> 
    @endif
    
    <a class="num">...</a>
    
    <a class="num">{{ $paginator->firstItem() }}-{{ $paginator->lastItem() }}</a> 
    
    <a class="num">...</a>
     
     @if ($paginator->hasMorePages())
    <a  class="num" href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a> 
    @else
        <a class="num">Fine</a> 
    @endif
    
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="next"><i class="fas fa-angle-right"></i></a> 
    @else
        <a class="next"><i class="fas fa-angle-right"></i></a> 
    @endif
    
@endif
</div>
