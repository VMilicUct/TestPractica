<template>
  <div class="row starter-main">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4>FUNCIONA!</h4>
          <div class="card-header-right">
            <ul class="list-unstyled card-option">
              <li><i class="icon-more-alt"></i></li>
              <li><i class="view-html fa fa-code"></i></li>
              <li><i class="icofont icofont-maximize full-card"></i></li>
              <li><i class="icofont icofont-minus minimize-card"></i></li>
              <li><i class="icofont icofont-refresh reload-card"></i></li>
              <li><i class="icofont icofont-error close-card"></i></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <p>Getting start with your project custom requirements using a ready template...</p>
          <ul>
            <li>
              <p>Mofi Admin provides you getting start pages with different layouts...</p>
            </li>
            <li>
              <p>Every components in Mofi Admin are decoupled...</p>
            </li>
            <li>
              <p>It use PUG as template engine to generate pages and whole template quickly...</p>
            </li>
          </ul>
          <div class="code-box-copy">
            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy">
              <i class="icofont icofont-copy-alt"></i>
            </button>
            <pre><code class="language-html" id="example-head">
              &lt;!-- Cod Box Copy begin --&gt;
              &lt;p&gt;Getting start with your project custom requirements using a ready template...&lt;/p&gt;
              &lt;ul&gt;
              &lt;li&gt;&lt;p&gt;Mofi Admin provides you getting start pages with different layouts...&lt;/p&gt;&lt;/li&gt;
              &lt;li&gt;&lt;p&gt;Every components in Mofi Admin are decoupled...&lt;/p&gt;&lt;/li&gt;
              &lt;li&gt;&lt;p&gt;It use PUG as template engine to generate pages and whole template quickly...&lt;/p&gt;&lt;/li&gt;
              &lt;/ul&gt;
              &lt;!-- Cod Box Copy end --&gt;
            </code></pre>
          </div>
        </div>
      </div>
    </div>    
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
