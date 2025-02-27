import { useBlockProps, RichText, InnerBlocks } from "@wordpress/block-editor";
import { registerBlockType } from "@wordpress/blocks";
import { __ } from '@wordpress/i18n';
import metadata from "./block.json";
import CustomInspectorControls from "./inspectorControls";

const Edit = ({ attributes, setAttributes }) => {
  const blockProps = useBlockProps();

  const onChangeDay = (day) => {
    setAttributes({ day });
  };

  return (
    <>
    <CustomInspectorControls attributes={attributes} setAttributes={setAttributes} />
    <div {...blockProps}>
      <RichText
        tagName="h3" // Change tag to h3 for the day heading
        value={attributes.day}
        onChange={onChangeDay}
        placeholder="Add day..."
      />
      <InnerBlocks 
        allowedBlocks={['custom/dish-item']} // Only allow dish-item blocks
        template={[['custom/dish-item']]} // Optional: start with a dish-item block
      />
    </div>
    </>
  );
};

const save = ({ attributes }) => {
  return (
    <div>
      <RichText.Content tagName="h3" value={attributes.day} />
      <InnerBlocks.Content />
    </div>
  );
};

registerBlockType(metadata.name, {
  edit: Edit,
  save,
  __experimentalLabel: (attributes, { context }) => {
    return context === 'list-view' && attributes.day 
      ? attributes.day 
      : __('Dish Item');
  },
});
