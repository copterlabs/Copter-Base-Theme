<article @php post_class() @endphp>
  {{ the_post_thumbnail('large', array('class' => 'img-fluid mb-3')) }}
  @include('partials/entry-meta')
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
