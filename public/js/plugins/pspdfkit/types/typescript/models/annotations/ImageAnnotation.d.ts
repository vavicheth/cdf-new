import Annotation from './Annotation';
import { AnnotationCtorProps } from './Annotation';
declare class ImageAnnotation extends Annotation {
    description: string | null | undefined;
    fileName: string | null | undefined;
    contentType: string;
    imageAttachmentId: string;
    rotation: number;
    isSignature: boolean;
    static defaultValues: any;
    static readableName: string;
    constructor(args?: AnnotationCtorProps & {
        description?: string;
        fileName?: string;
        contentType?: string;
        imageAttachmentId?: string;
        rotation?: number;
        isSignature?: boolean;
    });
}
export default ImageAnnotation;
