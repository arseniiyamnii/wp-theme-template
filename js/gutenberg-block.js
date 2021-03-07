const {
  registerBlockType
} = wp.blocks;
const {
  RichText,
  InspectorControls,
  ColorPalette,
  MediaUpload
} = wp.editor;
const {
  PanelBody,
  IconButton,
  RangeControl
} = wp.components;
registerBlockType('alecaddd/custom-cta', {
  title: 'Call to Action',
  description: 'Block to generate a custom Call to Action',
  icon: 'format-image',
  category: 'layout',
  // custom attributes
  attributes: {
    title: {
      type: 'string',
      source: 'html',
      selector: 'h2'
    },
    titleColor: {
      type: 'string',
      default: 'black'
    },
    body: {
      type: 'string',
      source: 'html',
      selector: 'p'
    },
    backgroundImage: {
      type: 'string',
      default: null
    },
    overlayColor: {
      type: 'string',
      default: 'black'
    },
    overlayOpacity: {
      type: 'number',
      default: 0.3
    }
  },

  edit({
    attributes,
    setAttributes
  }) {
    const {
      title,
      body,
      titleColor,
      backgroundImage,
      overlayColor,
      overlayOpacity
    } = attributes; // custom functions

    function onChangeTitle(newTitle) {
      setAttributes({
        title: newTitle
      });
    }

    function onChangeBody(newBody) {
      setAttributes({
        body: newBody
      });
    }

    function onTitleColorChange(newColor) {
      setAttributes({
        titleColor: newColor
      });
    }

    function onSelectImage(newImage) {
      setAttributes({
        backgroundImage: newImage.sizes.full.url
      });
    }

    function onOverlayColorChange(newColor) {
      setAttributes({
        overlayColor: newColor
      });
    }

    function onOverlayOpacityChange(newOpacity) {
      setAttributes({
        overlayOpacity: newOpacity
      });
    }

    return [/*#__PURE__*/React.createElement(InspectorControls, {
      style: {
        marginBottom: '40px'
      }
    }, /*#__PURE__*/React.createElement(PanelBody, {
      title: 'Font Color Settings'
    }, /*#__PURE__*/React.createElement("p", null, /*#__PURE__*/React.createElement("strong", null, "Select a Title color:")), /*#__PURE__*/React.createElement(ColorPalette, {
      value: titleColor,
      onChange: onTitleColorChange
    })), /*#__PURE__*/React.createElement(PanelBody, {
      title: 'Background Image Settings'
    }, /*#__PURE__*/React.createElement("p", null, /*#__PURE__*/React.createElement("strong", null, "Select a Background Image:")), /*#__PURE__*/React.createElement(MediaUpload, {
      onSelect: onSelectImage,
      type: "image",
      value: backgroundImage,
      render: ({
        open
      }) => /*#__PURE__*/React.createElement(IconButton, {
        className: "editor-media-placeholder__button is-button is-default is-large",
        icon: "upload",
        onClick: open
      }, "Background Image")
    }), /*#__PURE__*/React.createElement("div", {
      style: {
        marginTop: '20px',
        marginBottom: '40px'
      }
    }, /*#__PURE__*/React.createElement("p", null, /*#__PURE__*/React.createElement("strong", null, "OverlayColor:")), /*#__PURE__*/React.createElement(ColorPalette, {
      value: overlayColor,
      onChange: onOverlayColorChange
    })), /*#__PURE__*/React.createElement(RangeControl, {
      label: 'Overlay Opacity',
      value: overlayOpacity,
      onChange: onOverlayOpacityChange,
      min: 0,
      max: 1,
      step: 0.05
    }))), /*#__PURE__*/React.createElement("div", {
      class: "cta-container",
      style: {
        backgroundImage: `url(${backgroundImage})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat'
      }
    }, /*#__PURE__*/React.createElement(RichText, {
      key: "editable",
      tagName: "h2",
      placeholder: "Your CTA Title",
      value: title,
      onChange: onChangeTitle,
      style: {
        color: titleColor
      }
    }), /*#__PURE__*/React.createElement(RichText, {
      key: "editable",
      tagName: "p",
      placeholder: "Your CTA Description",
      value: body,
      onChange: onChangeBody
    }))];
  },

  save({
    attributes
  }) {
    const {
      title,
      body,
      titleColor,
      backgroundImage
    } = attributes;
    return /*#__PURE__*/React.createElement("div", {
      class: "cta-container",
      style: {
        backgroundImage: `url(${backgroundImage})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat'
      }
    }, /*#__PURE__*/React.createElement("h2", {
      style: {
        color: titleColor
      }
    }, title), /*#__PURE__*/React.createElement(RichText.Content, {
      tagName: "p",
      value: body
    }));
  }

});