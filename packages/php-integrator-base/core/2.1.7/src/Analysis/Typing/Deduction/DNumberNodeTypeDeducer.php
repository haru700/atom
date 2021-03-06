<?php

namespace PhpIntegrator\Analysis\Typing\Deduction;

use UnexpectedValueException;

use PhpParser\Node;

/**
 * Type deducer that can deduce the type of a {@see Node\Scalar\DNumber} node.
 */
class DNumberNodeTypeDeducer extends AbstractNodeTypeDeducer
{
    /**
     * @inheritDoc
     */
    public function deduce(Node $node, $file, $code, $offset)
    {
        if (!$node instanceof Node\Scalar\DNumber) {
            throw new UnexpectedValueException("Can't handle node of type " . get_class($node));
        }

        return $this->deduceTypesFromDNumberNode($node);
    }

    /**
     * @param Node\Scalar\DNumber $node
     *
     * @return string[]
     */
    protected function deduceTypesFromDNumberNode(Node\Scalar\DNumber $node)
    {
        return ['float'];
    }
}
