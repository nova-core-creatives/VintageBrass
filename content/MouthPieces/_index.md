
title: Trumpets
date: {{ .Date }}

---

I decided to start learning Go in March 2017.

Follow my journey through this new blog.

  <head>
    {{ partial "meta.html" . }}
    <title>{{ block "title" . }}{{ .Site.Title }}{{ end }}</title>
    {{ partial "css.html" . }}
  </head>

{{ define "main" }}
<main>
    <article>
        <header>
            <h1>{{.Title}}</h1>
        </header>
        <!-- "{{.Content}}" pulls from the markdown content of the corresponding _index.md -->
        {{.Content}}
    </article>
    <ul>
    <!-- Ranges through content/posts/*.md -->
    {{ range .Pages }}
        <li>
            <a href="{{.Permalink}}">{{.Date.Format "2006-01-02"}} | {{.Title}}</a>
        </li>
    {{ end }}
    </ul>
</main>
{{ end }}
