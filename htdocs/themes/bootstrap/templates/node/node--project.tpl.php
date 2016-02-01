{#
/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - node: Full node entity.
 *   - id: The node ID.
 *   - bundle: The type of the node, for example, "page" or "article".
 *   - authorid: The user ID of the node author.
 *   - createdtime: Formatted creation date. Preprocess functions can
 *     reformat it by calling format_date() with the desired parameters on
 *     $variables['node']->getCreatedTime().
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the "compact"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a "theming hook").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     "Article" it would result in "node--type-article". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: "node--view-mode-teaser", and
 *     full: "node--view-mode-full".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, "teaser" or "full".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}

{% if view_mode == 'full' %}

  {{ attach_library('bio_theme/magnific') }}

  <article id="node-{{ nid }}"{{ attributes.addClass(classes) }}>
    <div class="project-inner container">
    <div class="project-top">
      <div class="project-top-inner">
        <div class="twelve columns project-top-left">
          <div class="section-heading">
            <h2>Specs</h2>
          </div>
          <div class="project-logo">
            <img src="{{ logo }}">
          </div>
          <div class="drupal-version">
            {{ content.field_version }}
          </div>
          <div class="tools">
            {{ content.field_tools }}
          </div>
        </div>
        <div class="twelve columns project-top-right">
          <div class="section-heading">
            <h2>Summary</h2>
          </div>
          {{ content.body }}
          <div class="project-link">
            <a href="{{ site_url }}" class="btn faa-parent animated-hover" title="This link will open in a new window." target="_blank">Go to Site <i class="fa fa-chevron-circle-right faa-pulse"></i></a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="project-divider divider section-heading">
      <h2>Gallery</h2>
    </div>

    <div class="project-gallery">
      <div class="project-gallery-inner">
        <div class="section section-gallery">
          {% for slide in slides %}
          <a href="{{ slide.image_full }}" class="zoom grayscale-hover gallery-item-wrapper">
            <div class="gallery-item">
              <div class="gallery-item-inner">
                <img src="{{ slide.image_thumbnail }}" class="gallery-image">
                <div class="gallery-item-link"><a href="{{ slide.url }}" target="_blank"><i class="fa fa-camera"></i> View Example</a></div>
                <div class="gallery-item-caption">
                  <div class="gallery-item-caption-inner">
                    {{ slide.title }}
                  </div>
                </div>
              </div>
              <div class="gallery-item-fix-margin"></div>
            </div>
          </a>
          {% endfor %}
        </div>
      </div>
    </div>
    </div>
  </article>

{% endif %}

{% if view_mode == 'teaser' %}

  <article{{ attributes.addClass(classes) }}>
    <div class="version">{{ version }}</div>
    <div class="twelve columns project-left">
      <div class="node-link">
       <a href="{{ url }}">{{ label }}</a>
      </div>
      <div class="project-description">
        {{ content.body }}
      </div>
      <div class="logo-bar">
        <div class="logo">
        <img src="{{ logo }}">
        </div>
        <div class="buttons">
          <a class="btn" href="{{ url }}">Project Info</a>
          <a class="btn" href="{{ site_url }}" target="_blank" title="This link will open in a new window.">View Site</a>
        </div>
      </div>
    </div>
    <div class="twelve columns project-right">
      <div class="project-slideshow">
        <div class="cycle-slideshow"
      data-cycle-timeout="6000"
      data-cycle-log="false"
      data-cycle-slides="> .cycle-slide"
      data-cycle-swipe="true"
      data-cycle-swipe-fx="scrollHorz"
      data-cycle-pause-on-hover="true"

    >
        {% for slide in slides %}
        <div class="cycle-slide" style="background-image: url({{ slide.image_thumbnail }});">
          <div class="slide-caption">
            <div class="slide-caption-title">{{ slide.title }}</div>
          </div>
        </div>
        {% endfor %}
        <div class="cycle-prev"><i class="fa fa-chevron-circle-left"></i></div>
        <div class="cycle-next"><i class="fa fa-chevron-circle-right"></i></div>
        <div class="cycle-pager"></div>
      </div>
      </div>
    </div>
  </article>

{% endif %}


