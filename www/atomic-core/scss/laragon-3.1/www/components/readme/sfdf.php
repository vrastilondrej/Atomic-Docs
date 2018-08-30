<button data-toggle="collapse" data-target="#demo">Collapsible</button>

<pre><code class="language-smarty">{foreach $foo as $bar}
  &lt;a href="{$bar.zig}"&gt;{$bar.zag}&lt;/a&gt;
  &lt;a href="{$bar.zig2}"&gt;{$bar.zag2}&lt;/a&gt;
  &lt;a href="{$bar.zig3}"&gt;{$bar.zag3}&lt;/a&gt;
{foreachelse}
  There were no rows found.
{/foreach}</code></pre>
<pre><code class="language-smarty">{foreach $foo as $bar}
  &lt;a href="{$bar.zig}"&gt;{$bar.zag}&lt;/a&gt;
  &lt;a href="{$bar.zig2}"&gt;{$bar.zag2}&lt;/a&gt;
  &lt;a href="{$bar.zig3}"&gt;{$bar.zag3}&lt;/a&gt;
{foreachelse}
  There were no rows found.
{/foreach}</code></pre>

<script type="text/plain" class="language-smarty">
{foreach $foo as $bar}
  <a href="{$bar.zig}">{$bar.zag}</a>
  <a href="{$bar.zig2}">{$bar.zag2}</a>
  <a href="{$bar.zig3}">{$bar.zag3}</a>
{foreachelse}
  There were no rows found.
{/foreach}
</script>