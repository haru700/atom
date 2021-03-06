<?php

namespace PhpIntegrator\Analysis\Typing\Deduction;

use UnexpectedValueException;

use PhpIntegrator\Analysis\Typing\TypeAnalyzer;

use PhpParser\Node;

/**
 * Type deducer that can deduce the type of a {@see Node\Expr\ArrayDimFetch} node.
 */
class ArrayDimFetchNodeTypeDeducer extends AbstractNodeTypeDeducer
{
    /**
     * @var TypeAnalyzer
     */
    protected $typeAnalyzer;

    /**
     * @var NodeTypeDeducerInterface
     */
    protected $nodeTypeDeducer;

    /**
     * @param TypeAnalyzer             $typeAnalyzer
     * @param NodeTypeDeducerInterface $nodeTypeDeducer
     */
    public function __construct(TypeAnalyzer $typeAnalyzer, NodeTypeDeducerInterface $nodeTypeDeducer)
    {
        $this->typeAnalyzer = $typeAnalyzer;
        $this->nodeTypeDeducer = $nodeTypeDeducer;
    }

    /**
     * @inheritDoc
     */
    public function deduce(Node $node, $file, $code, $offset)
    {
        if (!$node instanceof Node\Expr\ArrayDimFetch) {
            throw new UnexpectedValueException("Can't handle node of type " . get_class($node));
        }

        return $this->deduceTypesFromArrayDimFetchNode($node, $file, $code, $offset);
    }

    /**
     * @param Node\Expr\ArrayDimFetch $node
     * @param string|null             $file
     * @param string                  $code
     * @param int                     $offset
     *
     * @return string[]
     */
    protected function deduceTypesFromArrayDimFetchNode(Node\Expr\ArrayDimFetch $node, $file, $code, $offset)
    {
        $types = $this->nodeTypeDeducer->deduce($node->var, $file, $code, $offset);

        $elementTypes = [];

        foreach ($types as $type) {
            if ($type === 'string') {
                $elementTypes[] = 'string';
            } elseif ($this->typeAnalyzer->isArraySyntaxTypeHint($type)) {
                $elementTypes[] = $this->typeAnalyzer->getValueTypeFromArraySyntaxTypeHint($type);
            } else {
                $elementTypes[] = 'mixed';
            }
        }

        return array_unique($elementTypes);
    }
}
