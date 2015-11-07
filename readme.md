# Secret Devblog
Theme and customizations for a wordpress blog.

Currently being used for a rarely maintained dev blog: [Secret Codebase](http://joneubank.com/secretcodebase)

## Theme: secret
The theme being used is a modified version of Free wordpress theme [Tonal](https://theme.wordpress.com/themes/tonal).

Modifications are fairly minor and involve removing features more often than actual contributions.

## Things
### Checkbox List:
css added to show a list with checkboxes (checked or unchecked), usable for TODO list:
![Image of checkbox list](https://github.com/joneubank/secret-devblog/blob/master/git-img/checkbox-list.png?raw=true)

### PrismJS:
[Prism](http://prismjs.com/) is a code syntax highlighter. Using their actually quite slick download page I generated a minified js and css file to support Markup, CSS, JavaScript, Python, and Java code syntax in code blocks.

In posts, add a code block with a language-xxxx class to have prism style the code on page load:

```html
<pre>
	<code class="language-python">
		#Python code goes here
		print("Hello World!")
	</code>
</pre>
```
