( function( blocks, editor, element ) {
    var el = element.createElement;
    var InnerBlocks = editor.InnerBlocks;

    blocks.registerBlockType( 'custom/questions-accordion', {
        title: 'Question Accordion',
        icon: 'editor-help',
        category: 'widgets',
        attributes: {
            faqs: {
                type: 'array',
                default: [],
            },
        },
        edit: function( props ) {
            return el( 'div', { className: 'question-accordion' },
                el( InnerBlocks, {
                    allowedBlocks: [ 'core/paragraph', 'core/heading' ],
                    template: [
                        ['core/heading', { placeholder: 'Question' }],
                        ['core/paragraph', { placeholder: 'Answer' }],
                    ]
                })
            );
        },
        save: function( props ) {
            return el( 'div', { className: 'question-accordion' },
                el( InnerBlocks.Content )
            );
        },
    } );
} )( window.wp.blocks, window.wp.editor, window.wp.element );