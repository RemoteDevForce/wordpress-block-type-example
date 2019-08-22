// COLOR PICKER BLOCK
wp.blocks.registerBlockType('josh/color-block', {
  title: 'Color Border Block',
  icon: 'admin-appearance',
  category: 'common',
  attributes: {
    symbol: {type: 'string'},
    color: {type: 'string'}
  },
  edit: function(props) {
    function updateContent(event) {
      props.setAttributes({content: event.target.value})
    }

    function updateColor(value) {
      props.setAttributes({color: value.hex})
    }

    return wp.element.createElement(
        "div",
        null,
        wp.element.createElement(
            "h3",
            null,
            "Color Border Block"
        ),
        wp.element.createElement("input", { type: "text", value: props.attributes.content, onChange: updateContent }),
        wp.element.createElement(wp.components.ColorPicker, { color: props.attributes.color, onChangeComplete: updateColor })
    );
  },
  save: function(props) {
    return null;
  }
});

// STOCK PRICE BLOCK
wp.blocks.registerBlockType('josh/stock-block', {
  title: 'Stock Block',
  icon: 'chart-area',
  category: 'common',
  attributes: {
    symbol: {type: 'string'},
  },
  edit: function(props) {
    function updateContent(event) {
      props.setAttributes({symbol: event.target.value})
    }

    return wp.element.createElement(
        "div",
        null,
        wp.element.createElement(
            "h3",
            null,
            "My Stock Block"
        ),
        wp.element.createElement("input", { type: "text", value: props.attributes.symbol, onChange: updateContent })
    );
  },
  save: function(props) {
    return null;
  }
});
